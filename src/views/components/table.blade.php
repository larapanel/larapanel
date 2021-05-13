<div class="table-responsive pt-3 pb-3">
    <table class="table table-sm table-bordered table-hover" @if( isset( $id ) ) id="{{ $id }}" @endif>
        <thead class="text-primary">
            {{ $thead }}
        </thead>
        <tbody>
            {{ $tbody }}
        </tbody>
    </table>
</div>
