
<div class="toggle-switch-list dual-column-content">
    @foreach($roles as $role)
        <div>
            @include('components.custom-checkbox', [
                'name' => $name . '[' . $role->name . ']',
                'label' => $role->display_name,
                'value' => $role->id,
                'checked' => old($name . '.' . $role->name) || (!old('name') && isset($model) && $model->hasRole($role->name))
            ])
        </div>
    @endforeach
</div>

@if($errors->has($name))
    <div class="text-neg text-small">{{ $errors->first($name) }}</div>
@endif