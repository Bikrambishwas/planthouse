@php
    $clsname = count($data->children) > 0 ? 'has-children' : '';
    $isChecked = in_array((string) $data->id, $selectedIds) ? 'checked' : '';
@endphp

<li class="{{ $clsname }} mt-2">
    <a href="#">
        <label style="width:150px; margin-top:0px" class="cats">
            <input class="form-check-input" type="checkbox" name="taxonomy_{{ $data->id }}[]"
                value="{{ $data->id }}" {{ $isChecked }}>
            {{ $data->title }}
        </label>
    </a>

    @if (count($data->children) > 0)
        <ul class="sub-menu">
            @foreach ($data->children as $childCategory)
                @include('backend.menu.nested', [
                    'data' => $childCategory,
                    'selectedIds' => $selectedIds,
                ])
            @endforeach
        </ul>
    @endif
</li>
