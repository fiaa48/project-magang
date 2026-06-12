<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatbotController extends Controller
{
    public function send(Request $request)
    {
        $msg = strtolower($request->message);

        if (str_contains($msg, 'harga')) {
            $reply = "Untuk info harga, silakan hubungi WhatsApp kami ya 😊";
        } elseif (str_contains($msg, 'alamat')) {
            $reply = "Kami berada di Bandung, Antapani.";
        } elseif (str_contains($msg, 'halo') || str_contains($msg, 'hai')) {
            $reply = "Halo juga 👋 Ada yang bisa kami bantu?";
        } elseif (str_contains($msg, 'layanan')) {
            $reply = "Kami menyediakan jasa konsultansi konstruksi dan non-konstruksi.";
        } else {
            $reply = "Maaf, pesan belum kami pahami 🙏 Silakan hubungi WhatsApp ya.";
        }

        return response()->json([
            'reply' => $reply
        ]);
    }
}
