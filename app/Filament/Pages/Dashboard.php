<?php

namespace App\Filament\Pages;

use Filament\Pages\Dashboard as Page;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Card;
use App\Models\Student;

class Dashboard extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-home';

    public function mount(): void
    {
        parent::mount();

        // Mengambil jumlah student
        $studentCount = Student::count(); // Menghitung jumlah student

        // Menambahkan card dengan jumlah student
        $this->widgets[] = Card::make('Total Students', $studentCount)
            ->color('primary')
            ->icon('heroicon-o-users');
    }

    protected function getHeaderWidgets(): array
    {
        return [
            StatsOverviewWidget::class,
        ];
    }
}

