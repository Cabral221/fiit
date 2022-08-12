<footer class="c-footer">
    <div>
        <strong>
            @lang('Copyright') &copy; {{ date('Y') }}
            <x-utils.link href="http://fiit-protection.com" target="_blank" :text="__(appName())" />
        </strong>

        @lang('All Rights Reserved')
    </div>

    <div class="mfs-auto">
        @lang('Powered by')
        <x-utils.link href="http://cabral221.github.io" target="_blank" text="Cabral221" /> &
        <x-utils.link href="https://coreui.io" target="_blank" text="CoreUI" />
    </div>
</footer>
