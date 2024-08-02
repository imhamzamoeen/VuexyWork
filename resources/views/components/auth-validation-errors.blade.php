@props(['errors'])

@if ($errors->any())
    <div {{ $attributes }}>
        <div class="font-medium text-danger text-red-600">
            <strong>'Whoops! Something went wrong.</strong>
        </div>

        <ul class="mt-1 list-disc list-inside text-sm text-danger text-red-600">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
