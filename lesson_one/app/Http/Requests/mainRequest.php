<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class mainRequest extends FormRequest{

  public function authorize(){
    return true;
  }

  public function rules(){
    return [
      'name' => 'required',
      'mail' => 'required',
      'password' => 'required|confirmed|min:7',
      'password_confirmation' => 'required'
    ];
  }

  public function messages() {
    return [
      'name.required' => '名前を入力して下さい。',
      'mail.required' => 'メールアドレスを入力して下さい。',
      'password.required' => 'パスワードを入力して下さい。',
      'password_confirmation.required' => 'パスワードの再入力をして下さい。',
      'password.confirmed' => 'パスワードは同じものを入力して下さい。',
      'password.min' => 'パスワードは7文字以上で入力して下さい。',
    ];
  }
}
