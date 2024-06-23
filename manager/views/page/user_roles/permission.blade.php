<?php

use EvolutionCMS\Facades\ManagerTheme;

?>
@extends('manager::template.page')
@section('content')
    <form name="userform" method="post" action="index.php" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="a" value="135">
        <input type="hidden" name="mode" value="<?= evo()->getManagerApi()->action ?>">
        <input type="hidden" name="id" value="<?= isset($_GET['id']) ? (int) $_GET['id'] : '' ?>">

        <h1>
            <i class="fa fa-user-tag"></i>
            @isset($permission->name)
                <span>{{ $permission->name }}</span>
                <small>({{ $permission->id }})</small>
            @else
                <span>{{ __('global.permission_title') }}</span>
            @endisset
        </h1>

        {!!  ManagerTheme::getStyle('actionbuttons.dynamic.savedelete')  !!}

        <div class="tab-page">
            <div class="container container-body">
                <div class="form-group">
                    <div class="row form-row">
                        <div class="col-md-3 col-lg-2">{{ __('global.role_name') }}:</div>
                        <div class="col-md-9 col-lg-10">
                            <input class="form-control form-control-lg"
                                   name="name"
                                   type="text"
                                   maxlength="50"
                                   value="{{ $permission->name }}"/>
                        </div>
                    </div>
                    <div class="row form-row">
                        <div class="col-md-3 col-lg-2">{{ __('global.key_desc') }}:</div>
                        <div class="col-md-9 col-lg-10">
                            <input name="key"
                                   type="text"
                                   maxlength="255"
                                   value="{{ $permission->key }}"
                                   size="60"/>
                        </div>
                    </div>
                    <div class="row form-row">
                        <div class="col-md-3 col-lg-2">{{ __('global.lang_key_desc') }}:</div>
                        <div class="col-md-9 col-lg-10">
                            <input name="lang_key"
                                   type="text"
                                   maxlength="255"
                                   value="{{ $permission->lang_key }}"
                                   size="60"/>
                        </div>
                    </div>
                    @include('manager::form.select', [
                        'name' => 'group_id',
                        'id' => 'group_id',
                        'label' => __('global.existing_category'),
                        'value' => $permission->group_id,
                        'first' => [
                            'text' => ''
                        ],
                        'options' => $categories->pluck('category', 'id'),
                        'attributes' => 'onchange="documentDirty=true;"'
                    ])

                    @include('manager::form.input', [
                        'name' => 'newcategory',
                        'id' => 'newcategory',
                        'label' => __('global.new_category'),
                        'value' => $data->newcategory ?? '',
                        'attributes' => 'onchange="documentDirty=true;" maxlength="45"'
                    ])
                    <div class="form-row">
                        <label for="disabled">
                            @include('manager::form.inputElement', [
                                'type' => 'checkbox',
                                'name' => 'disabled',
                                'value' => '1',
                                'checked' => $permission->disabled === 1
                            ])
                            @if($permission->disabled == 1)
                                <span class="text-danger">{{ __('global.disabled') }}</span>
                            @else
                                <span>{{ __('global.disabled') }}</span>
                            @endif
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <input type="submit" name="save" style="display:none">
    </form>
@endsection


@push('scripts.bot')
    <script>
      function changestate (element) {
        documentDirty = true
        if (parseInt(element.value) === 1) {
          element.value = 0
        } else {
          element.value = 1
        }
      }

      var actions = {
        save: function () {
          documentDirty = false
          form_save = true
          document.userform.save.click()
        },
        delete: function () {
          if (confirm(`{{ __('global.confirm_delete_permission') }}`) === true) {
            document.location.href = 'index.php?id=' + document.userform.id.value + '&a=135&action=delete'
          }
        },
        cancel: function () {
          documentDirty = false
          document.location.href = 'index.php?a=86&tab=2'
        }
      }
    </script>
@endpush
