<?php

namespace App\PaymentChannels\Drivers\Sepay;

use App\Models\Order;
use App\Models\PaymentChannel;
use App\PaymentChannels\IChannel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class Channel implements IChannel
{
    public $bankName;
    public $bankCode;
    public $bankNumber;
    public $apiToken;
    public $paymentChannel;

    static $prefix = 'HUNGAI';
    public function __construct(PaymentChannel $paymentChannel)
    {
        $this->bankName = $paymentChannel->credentials['bank_name'] ?? null;
        $this->bankCode = $paymentChannel->credentials['bank_code'] ?? null;
        $this->bankNumber = $paymentChannel->credentials['number'] ?? null;
        $this->apiToken = $paymentChannel->credentials['token'] ?? null;
        $this->paymentChannel = $paymentChannel;
    }

    public function getContent(Order $order)
    {
        return static::$prefix . $order->reference_id;
    }
    public function getQrCodeSource(Order $order): string
    {
        $amount = floatval($order->total_amount);
        $code = static::$prefix . $order->reference_id;
        return "https://qr.sepay.vn/img?acc={$this->bankNumber}&bank={$this->bankCode}&amount={$amount}&des={$code}";
    }

    public function paymentRequest(Order $order)
    {
        $order->reference_id = Str::upper(Str::random(10));
        $order->save();
        return '/payments/bank-transfer/' . $order->reference_id . "/" . $this->paymentChannel->id;
//        return Redirect::route('bankTransfer', [ 'code' => $order->code, 'chanelId' => $this->paymentChannel->id]);
//        return redirect('/payments/bank-transfer/' . $order->code . "/" . $this->paymentChannel->id);
    }

    public function verify(Request $request)
    {
        $token = $request->header('Authorization');
        $token = Str::replace('Apikey ', '', $token);
        if ($token != $this->apiToken) {
            throw new \Exception('Invalid Token');
        }

        $data = $request->all();
        $content = $data['content'];
        preg_match('/HUNGAI(\w*)/', $content, $matches);
<<<<<<< HEAD
        $code = $matches[1];
        $order = Order::query()->where('reference_id', $code)->first();
        if ($order->status == Order::$paid) {
            throw new \Exception('Order already paid');
        }
=======
        if (empty($matches)) {
            throw new \Exception('Not found order id');
        }
        $code = $matches[1];
        $order = Order::query()->where('reference_id', $code)->first();
        if (empty($order)) {
            throw new \Exception('Not found order: ' . $code);
        }
        if ($order->status == Order::$paid) {
            throw new \Exception('Order already paid');
        }
        if ($data['transferAmount'] < $order->amount) {
            throw new \Exception('Not enough money transfer');
        }
>>>>>>> 0c6935c93267bbb11d7188927eee9b8a200a68b3
        $order->update(['status' => Order::$paying]);
        return $order;

    }

    public function getCredentialItems(): array
    {
        // TODO: Implement getCredentialItems() method.
    }
}
