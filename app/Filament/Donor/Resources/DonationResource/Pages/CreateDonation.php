<?php

namespace App\Filament\Donor\Resources\DonationResource\Pages;

use App\Filament\Donor\Resources\DonationResource;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Wizard\Step;
use Filament\Resources\Pages\CreateRecord;

class CreateDonation extends CreateRecord
{
    use CreateRecord\Concerns\HasWizard;

    protected static string $resource = DonationResource::class;

    protected function getSteps(): array
    {
        return [
            Step::make('Snfo')
                ->label('المعلومات')
                ->description('قم بإدخال معلومات التبرع')
                ->schema([
                    TextInput::make('donation_name')
                        ->label('الاسم'),
                    Select::make('quantity_type')
                        ->label(' نوع الكمية')
                    ->options([
                        'علبة' => 'علبة',
                        'قطعة' => 'قطعة',
                        'حبة' => 'حبة',
                        'طبق' => 'طبق',
                        'كيس' => 'كيس',
                        'رزمة' => 'رزمة',
                        'قنينة' => 'قنينة',
                        'كيلوغرام' => 'كيلوغرام',
                        'لتر' => 'لتر',
                        'غرام' => 'غرام',
                        'مليلتر' => 'مليلتر',
                    ]),

                    TextInput::make('quantity')
                        ->label('الكمية'),
                    DatePicker::make('expiration_date')
                        ->label('تاريخ الانتهاء'),
                    // Hidden::make('donor_id')->default(auth()->user()->donor->id)

                ])->columns(4),
            Step::make('Description')
                ->label('الوصف')
                ->description('صف مواد التبرع و أترك أي معلومات أو ملاحضات مهمة')
                ->schema([
                    RichEditor::make('description'),
                ]),
            Step::make('Visibility')
                ->label('الصورة')
                ->description('إرفع صورة لمواد التبرع في شكلها الحالي')
                ->schema([
                    FileUpload::make('image_url')->directory('donation_images')->preserveFilenames()->image()
                        ->imageEditor()->imageEditorAspectRatios(
                            [
                                '16:9',
                                '4:3',
                                '1:1',
                            ]
                        ),
                ]),
        ];
    }
    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['donor_id'] = auth()->user()->donor->id;
        return $data;
    }
}
