<div class="modal fade" id="{{ $id ?? 'modal-component' }}" tabindex="-1" role="dialog" aria-labelledby="modal-component-label" aria-hidden="true">
    <div class="vertical-alignment-helper">
        <div class="modal-dialog {{ $size ?? '' }} vertical-align-center" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-primary" id="modal-component-label">{{ $title }}</h5>
                    <button type="button" class="close pl-0" data-dismiss="modal" aria-label="Close">
                        <span class="" aria-hidden="true" >
                            <i class="fa fa-close"></i>
                        </span>
                    </button>
                </div>
                <div class="modal-body">
                    {{ $body }}
                </div>
                <div class="modal-footer border-top-0">
                    {{ $footer }}
                    <button type="button" class="btn btn-danger" data-dismiss="modal">بستن</button>
                </div>
            </div>
        </div>
    </div>
</div>


