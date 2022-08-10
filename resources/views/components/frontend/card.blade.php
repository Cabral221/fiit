<div {{ $attributes->merge(['class' => 'card'], ['style' => '']) }}>
    @if (isset($header))
        <div class="card-header">
            {{ $header }}

            @if (isset($headerActions))
                <div class="d-inline-block float-right">
                    {{ $headerActions }}
                </div>
                <!--card-header-actions-->
            @endif
        </div>
        <!--card-header-->
    @endif

    @if (isset($body))
        <div class="card-body">
            {{ $body }}
        </div>
        <!--card-body-->
    @endif

    @if (isset($footer))
        <div class="card-footer">
            {{ $footer }}
        </div>
        <!--card-footer-->
    @endif
</div>
<!--card-->
