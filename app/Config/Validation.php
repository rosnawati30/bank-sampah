<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Validation\StrictRules\CreditCardRules;
use CodeIgniter\Validation\StrictRules\FileRules;
use CodeIgniter\Validation\StrictRules\FormatRules;
use CodeIgniter\Validation\StrictRules\Rules;

class Validation extends BaseConfig
{
    // --------------------------------------------------------------------
    // Setup
    // --------------------------------------------------------------------

    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var list<string>
     */
    public array $ruleSets = [
        Rules::class,
        FormatRules::class,
        FileRules::class,
        CreditCardRules::class,
    ];

    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public array $templates = [
        'list'   => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
    ];

    // --------------------------------------------------------------------
    // Rules
    // --------------------------------------------------------------------
    // Public property to store validation rules
    public array $nasabah = [
        'nama' => 'required',
        'alamat' => 'required',
        'total_sampah' => 'required|numeric'
    ];

    // Custom error messages
    public array $nasabah_errors = [
        'nama' => [
            'required' => 'Nama is required.'
        ],
        'alamat' => [
            'required' => 'Alamat is required.'
        ],
        'total_sampah' => [
            'required' => 'Berat sampah is required.',
            'numeric' => 'Berat sampah must be a number.'
        ]
    ];
}
