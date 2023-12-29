<?php

namespace App\Filament\Donor\Pages\Auth;

use App\Models\User;
use Dompdf\FrameDecorator\Text;
use Filament\Pages\Auth\Register as BaseRegister;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Component;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;

class Register extends BaseRegister
{
    public function form(Form $form): Form

    {
        return $form->schema([
            Section::make(' معلومات الحساب')
                ->schema([
                    $this->getNameFormComponent(),
                    $this->getEmailFormComponent(),
                    $this->getPasswordFormComponent(),
                    $this->getPasswordConfirmationFormComponent(),
                    Hidden::make('role')->default('donor'),
                ]),
            Section::make('معلومات الحساب ')
                ->schema([
                    Select::make('donor_type')->label('نوع المتبرع')->required()->options(
                        [
                            'a' => 'متجر',
                            'b' => 'مطعم'
                        ]
                    ),
                    TextInput::make('user_name')->label('الاسم')->required(),
                    FileUpload::make('user_image')->label('رقم الهاتف')->required(),
                    TextInput::make('user_location')->label('العنوان')->required(),
                    TextInput::make('user_contact_email')->label('المدينة')->required(),
                    TextInput::make('user_contact_phone')->label('الصورة')->required(),
                ])


        ])->statePath('data');
    }

    // protected function getRoleFormComponent(): Component
    // {
    //     return  Fieldset::make('Metadata')
    //     ->relationship('donor')
    //     ->schema([
    //         TextInput::make('name'),
    //     ]);
    // }
}
