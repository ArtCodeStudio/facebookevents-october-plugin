<?php namespace ArtAndCodeStudio\FacebookEvents\Models;

use Model;

/**
 * Model
 */
class ManualEventsSettings extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Register Plugin Setting in teh main Settings Sidebar
     */
    public $implement = ['System.Behaviors.SettingsModel'];
    public $settingsCode = 'artandcodestudio_facebookevent_manualeventsettings';
    public $settingsFields = 'fields.yaml';

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'artandcodestudio_facebookevents_manualeventssettings';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
