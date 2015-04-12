<?php GrahamCampbell\BootstrapCMS\Providers;
use Illuminate\Support\ServiceProvider;
use GrahamCampbell\BootstrapCMS\Services\Validation\CustomValidator as CustomValidator;
use Validator;

class CustomValidationServiceProvider extends ServiceProvider {
	/**
	* boot
	*/
	public function boot()
	{
		Validator::resolver(function($translator, $data, $rules, $messages, $customAttributes = array() )
		{
			return new CustomValidator($translator, $data, $rules, $messages, $customAttributes);
		});

	}

	/**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
