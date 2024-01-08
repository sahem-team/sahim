<?php

namespace App\Filament\Charity\Pages;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Pages\Page;
use Filament\Forms\Form;
use Filament\Actions;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Notifications\Notification;
use Illuminate\Support\Facades\Hash;

class EditProfile extends Page implements HasForms
{
    use InteractsWithForms;

    //...
    protected static string $view = 'filament.charity.pages.edit-profile';
    public static ?string $title = 'تعديل الملف الشخصي';

    public static function shouldRegisterNavigation(): bool
    {
        return false;
    }

    public ?array $userData = [];
    public ?array $profilData = [];

    public function mount(): void
    {
        $this->editUserForm->fill(
            auth()->user()->attributesToArray()
        );
        $this->editProfileForm->fill(
            auth()->user()->charity->attributesToArray()
        );
    }

    protected function getForms(): array
    {
        return [
            'editUserForm',
            'editProfileForm',
        ];
    }

    public function editUserForm(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('معلومات الحساب')->schema([
                    TextInput::make('name')->label('الاسم'),
                    TextInput::make('email')->label('البريد الالكتروني'),
                    TextInput::make('password')->label('كلمة المرور الجديدة')
                        ->password()
                        ->dehydrateStateUsing(fn ($state) => Hash::make($state))
                        ->dehydrated(fn ($state) => filled($state)),
                ])

            ])
            ->statePath('userData')
            ->model(auth()->user());
    }
    public function editProfileForm(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('معلومات المتبرع')->schema([

                    TextInput::make('name')->label('الاسم'),
                    FileUpload::make('image')->label('الصورة')->directory('charities_images')->preserveFilenames()->image()
                        ->imageEditor()->imageEditorAspectRatios(
                            [
                                '16:9',
                                '4:3',
                                '1:1',
                            ]
                        ),
                    TextInput::make('service_area')->label('الموقع'),
                    TextInput::make('contact_phone')->label('الهاتف'),
                    TextInput::make('contact_email')->label('البريد الالكتروني'),

                ])
            ])
            ->statePath('profilData')
            ->model(auth()->user());
    }

    protected function getFormActions(): array
    {
        return [
            Actions\Action::make('Update')
                ->label('تحديث')
                ->color('primary')
                ->submit('Update')
        ];
    }


    public function updateUser()
    {
        auth()->user()->update(
            $this->editUserForm->getState()
        );
        Notification::make()
            ->title('تم التعديل بنجاح')
            ->success()
            ->send();
        return redirect('/charity');
    }
    public function updateProfil()
    {
        auth()->user()->charity->update(
            $this->editProfileForm->getState()
        );
        Notification::make()
            ->title('تم التعديل بنجاح')
            ->success()
            ->send();
        return redirect('/charity');
    }
    // ..
}
