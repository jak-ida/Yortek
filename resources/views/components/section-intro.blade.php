@props([
    'eyebrow',
    'title',
    'lead' => null,
])

<div {{ $attributes->merge(['class' => 'section-intro reveal mb-5']) }}>
    <p class="section-eyebrow text-primary mb-2">{{ $eyebrow }}</p>
    <h2 class="display-6 fw-bold text-theme lh-sm {{ $lead ? 'mb-3' : 'mb-0' }}">{{ $title }}</h2>
    @if ($lead)
        <p class="section-lead mb-0">{{ $lead }}</p>
    @endif
</div>
