<div
    wire:ignore
    x-data
    x-init="
        setTimeout(() => {
           $('.datepickerInput').persianDatepicker({
                format: '{{ $format ?? 'YYYY-MM-DD' }}',
                calendar: {
                    persian: {
                        locale: 'en',
                        leapYearMode: 'astronomical'
                    }
                },
                timePicker: {
                    enabled: {{ $withTime ?? 'false' }},
                    meridiem: { enabled: true }
                },
                onSelect: function(unix) {
                    let val = new persianDate(unix).format('{{ $format ?? 'YYYY-MM-DD' }}');
                    @this.set('{{ $attributes->get('wire:model') }}', val);
        }
            });
        }, 300);
    "
>
    <input
        type="text"
        autocomplete="off"
        {{ $attributes->except('wire:model')->merge(['class' => 'datepickerInput w-full rounded-md border p-2']) }}
    />
</div>
