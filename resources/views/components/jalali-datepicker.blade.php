<div 
    x-data="{
        init() {
            const input = this.$refs.input;
            $(input).persianDatepicker({
                format: '{{ $format ?? 'YYYY-MM-DD' }}',
                timePicker: {
                    enabled: {{ $withTime ?? 'false' }},
                    meridiem: { enabled: true }
                },
                onSelect: function(unix) {
                    const val = new persianDate(unix).format('{{ $format ?? 'YYYY-MM-DD' }}');
                    input.value = val;
                    input.dispatchEvent(new Event('input', { bubbles: true }));
                }
            });
        }
    }"
    x-init="init"
>
    <input
        x-ref="input"
        wire:model.live="{{ $attributes->get('wire:model') }}"
        type="text"
        {{ $attributes->except('wire:model')->merge(['class' => 'form-input w-full rounded-md']) }}
    />
</div>