<div
    x-data="recaptcha()"    
    x-init="init"
    @recaptcha.window="execute"
></div>

@push('scripts')
    <script src="https://www.google.com/recaptcha/api.js??render=explicit" async defer></script>

    <script>
        window.recaptcha = function () {
            return {
                init() {
                    // render
                    
                    grecaptcha.ready(()=>{
                        grecaptcha.render(this.$el, {
                            'sitekey': '{{ config('services.recaptcha.key') }}',
                            'size': 'invisible',
                            'callback': this.onComplete.bind(this)
                        });
                    });
                },

                execute() {
                    alert('execute');
                    
                    grecaptcha.execute();
                },

                onComplete() {
                    // dispatch an event announcing that recaptcha verification is complete
                    // and we are ready to submit the form
                    this.$el.closest('form').submit();
                }
            };
        };
    </script>
    
@endpush