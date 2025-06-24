<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SendController extends Controller
{
    public function send(Request $request)
    {
        // file: send_zalo_message.php

        // --- 1. Cấu hình của bạn ---
        // Thay thế bằng App ID và Secret Key thật của bạn
        define('ZALO_APP_ID', '1929928913067429705');
        define('ZALO_SECRET_KEY', 'GXh66vQQ9dQbr4gNSLGH');

        // --- RẤT QUAN TRỌNG: Lấy OA Access Token
        // OA Access Token này là token dành cho Official Account của bạn,
        // KHÔNG PHẢI token của tài khoản Zalo cá nhân.
        // Sau khi bạn đã liên kết OA với Zalo App trên Zalo Developer,
        // bạn có thể tìm thấy token này trong phần quản lý Zalo App -> Quản lý OA
        // hoặc Zalo Official Account Management.
        // Nếu không, bạn cần thực hiện luồng lấy OA Access Token theo tài liệu của Zalo,
        // thường sẽ liên quan đến việc lấy một "code" đặc biệt cho OA rồi đổi thành token.
        // Đơn giản nhất là lưu trữ nó sau khi đã lấy được.
        define('ZALO_OA_ACCESS_TOKEN', 'HN-00mySQXjFVuW21nDi74rmY0O011aKC0wYUGqo9Xv12f1_IZWNEMiFbtTZ0WaDIp6tGbacLIrF3kbBPGDY4qrXxd9aKtCqAahkK1yXUW8WEi1g20Cd4183aGuUQYKJ8L6FIprZ6YGgTVr78avYEJSZrtLt358wEcxo9Z5jHLGmJVLA1YPg6XaTwtqA1cuzIYhFUmD7MW8TMUOPB79RHpvDvWm7VmLv45A3C2PE6KzhTwGCNnmrTa4CamPm6pWPCIInGnmGDnuKAx5QGKDH4N4fw6X-9WqTSn2LMc0zDmLX08LURmm7DLOoZNDFAcbe1KYFE1LKRNmWQCmV3nzKVH8Zopm95rTO57x77nbxVKqCO_qf8mvzMX8QzqSO61Gg8moLPpSm2I0kAvbL0pCP3nKQarDNDNXQqoe92s8G');

        // ID của người dùng Zalo mà bạn muốn gửi tin nhắn đến.
        // Bạn sẽ nhận được user_id này từ Webhook khi người dùng tương tác với OA của bạn.
        $recipient_user_id = $request->input('sender.id', 'YOUR_RECIPIENT_USER_ID');
        $message_text = 'Chào bạn từ chatbot PHP Zalo!';

        // --- 2. Hàm gửi tin nhắn Zalo ---
        function sendZaloMessage($user_id, $message_content, $access_token) {
            $url = 'https://openapi.zalo.me/v3.0/oa/message';

            $headers = [
                'Content-Type: application/json',
                'access_token: ' . $access_token,
            ];

            $payload = [
                'recipient' => [
                    'user_id' => $user_id,
                ],
                'message' => [
                    'text' => $message_content,
                ],
            ];

            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($payload));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            
            // Nếu bạn gặp lỗi SSL (ví dụ: chứng chỉ tự ký hoặc môi trường dev), 
            // có thể thêm dòng này để bỏ qua kiểm tra SSL. 
            // KHÔNG NÊN DÙNG TRONG MÔI TRƯỜNG PRODUCTION.
            // curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            // curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);

            $response = curl_exec($ch);
            $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            $curl_error = curl_error($ch);

            curl_close($ch);

            if ($response === false) {
                error_log("cURL Error: " . $curl_error);
                return ['success' => false, 'message' => 'cURL Error: ' . $curl_error];
            }

            $response_data = json_decode($response, true);

            if ($http_code === 200 && isset($response_data['error']) && $response_data['error'] === 0) {
                return ['success' => true, 'data' => $response_data];
            } else {
                $error_message = isset($response_data['message']) ? $response_data['message'] : 'Unknown error';
                error_log("Zalo API Error (HTTP: $http_code): " . $error_message);
                return ['success' => false, 'message' => $error_message, 'http_code' => $http_code, 'response_data' => $response_data];
            }
        }

        // --- 3. Thực thi gửi tin nhắn ---
        if (ZALO_OA_ACCESS_TOKEN === 'YOUR_ZALO_OA_ACCESS_TOKEN') {
            echo "Lỗi: Vui lòng thay thế 'YOUR_ZALO_OA_ACCESS_TOKEN' bằng Access Token thực tế của OA của bạn.\n";
        } elseif ($recipient_user_id === 'YOUR_RECIPIENT_USER_ID') {
            echo "Lỗi: Vui lòng thay thế 'YOUR_RECIPIENT_USER_ID' bằng ID người dùng Zalo hợp lệ.\n";
        } else {
            $result = sendZaloMessage($recipient_user_id, $message_text, ZALO_OA_ACCESS_TOKEN);

            if ($result['success']) {
                echo "Gửi tin nhắn Zalo thành công!\n";
                print_r($result['data']);
            } else {
                echo "Gửi tin nhắn Zalo thất bại: " . $result['message'] . "\n";
                if (isset($result['http_code'])) {
                    echo "HTTP Code: " . $result['http_code'] . "\n";
                }
                if (isset($result['response_data'])) {
                    echo "Phản hồi chi tiết: " . json_encode($result['response_data'], JSON_PRETTY_PRINT) . "\n";
                }
            }
        }

    }
}