<?php

namespace App\Providers\Filament;

use App\Filament\Donor\Pages\EditProfile;
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Navigation\MenuItem;
use Filament\Pages;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Widgets;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\AuthenticateSession;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;

class DonorPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->id('donor')
            ->path('donor')
            ->login()
            ->profile()
            ->userMenuItems([
                'profile' => MenuItem::make()->url(fn (): string => EditProfile::getUrl())
            ])
            ->topNavigation()
            ->colors([
                'primary' => '#f16d5b',
            ])
            ->font('Almarai')
            ->brandName('ساهم')
            ->brandLogo(asset('assets/logos/logo.png'))
            ->favicon(asset('assets/logos/1.png'))
            ->discoverResources(in: app_path('Filament/Donor/Resources'), for: 'App\\Filament\\Donor\\Resources')
            ->discoverPages(in: app_path('Filament/Donor/Pages'), for: 'App\\Filament\\Donor\\Pages')
            ->pages([
                Pages\Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Donor/Widgets'), for: 'App\\Filament\\Donor\\Widgets')
            ->widgets([
                Widgets\AccountWidget::class,
                // App\Filament\Donor\Resources\DonationResource\Widgets\DonationOverview::class

            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ]);
    }
}
