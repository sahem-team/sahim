<?php

namespace App\Filament\Donor\Resources\DonationResource\Pages;

use App\Filament\Donor\Resources\DonationResource;
use Filament\Actions;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
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
                            'box' => 'علبة',
                            'item' => 'قطعة',
                            'unit' => 'حبة',
                            'plate' => 'طبق',
                            'bag' => 'كيس',
                            'package' => 'رزمة',
                            'bottle' => 'قنينة',
                            'kilogram' => 'كيلوغرام',
                            'liter' => 'لتر',
                            'gram' => 'غرام',
                            'milliliter' => 'مليلتر',
                        ]),

                    TextInput::make('quantity')
                        ->label('الكمية'),
                    DatePicker::make('expiration_date')
                        ->label('تاريخ الانتهاء'),
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
        $data['donor_id'] = 1;
        return $data;
    }
}
