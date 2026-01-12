<div class="js-cookie-consent cookie-consent">
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document" style="max-width: 1300px !important;">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">{!! trans('cookieConsent::texts.0') !!}</h5>
        </div>
        <div class="modal-body">
            <span class="cookie-consent__message">
            {!! trans('cookieConsent::texts.message') !!}
            </span>
        </div>
        <div class="modal-footer">
            <a class="btn btn-secondary" href="https://www.google.com/" role="button">{!! trans('cookieConsent::texts.no') !!}</a>
            <button type="button" class="btn btn-primary js-cookie-consent-agree cookie-consent__agree">{!! trans('cookieConsent::texts.agree') !!}</button>
        </div>
        </div>
    </div>
    </div>
</div>
