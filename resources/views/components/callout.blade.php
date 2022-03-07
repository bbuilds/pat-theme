<div {{$attributes}} class="border border-neutral-50/30 bg-slate-50/10  rounded-tr-3xl rounded-bl-3xl md:flex md:items-center overflow-hidden">
    @if($imageElement)
        <figure>{!! $imageElement !!}</figure>
    @endif
    <div class="p-4">
        <h2 class="text-6xl leading-tight mb-4">{{$title}}</h3>
        {!! $slot !!}
    </div>
</div>
