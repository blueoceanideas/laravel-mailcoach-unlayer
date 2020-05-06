<?php

namespace Spatie\MailcoachUnlayer\Http\Requests;

use App\Http\FormRequest;

class UploadRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'file' => 'required|image'
        ];
    }
}
