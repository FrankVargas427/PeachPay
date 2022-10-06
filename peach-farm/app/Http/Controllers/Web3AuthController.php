<?php

namespace App\Http\Controllers;

class Web3AuthController extends Controller
{
    public function authenticate(LoginMetamaskRequest $request)
    {
        Web3::verifySignature(
            $this->getSignatureMessage(session()->get('metamask-nonce')),
            $request->signature,
            $request->address,
        );

        $user = User::query()->where('eth_address', $request->address)->firstOrFail();

        auth()->login($user);

        session()->forget('metamask-nonce');

        return true;
    }

    public function signature(Request $request)
    {
        $code = \Str::random(8);

        session()->put('metamask-nonce', $code);

        return $this->getSignatureMessage($code);
    }

    private function getSignatureMessage($code)
    {
        return __("I have read and accept the terms and conditions.\nPlease sign me in.\n\nSecurity code (you can ignore this): :nonce", [
            'nonce' => $code
        ]);
    }
}
