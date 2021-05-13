<div id="search-collapse" class="accordion">
    <div class="card mb-0">
        <div class="card-header collapsed text-primary cursor-pointer py-2" data-toggle="collapse" aria-expanded="{{ (request('keyword') == '') ? false : true }}" data-target="#collapse-search-content">
            <i class="fa fa-filter"></i>
            <span class="card-title"> جستجو </span>
        </div>
        <div id="collapse-search-content" class="card-body p-0 collapse {{ (request('keyword') == '') ? '' : 'show' }}" aria-labelledby="collapse-search-content" data-parent="#search-collapse">
            <div class="card-body m-2">
                {{ $form }}
            </div>
        </div>
    </div>
</div>
