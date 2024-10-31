@extends('layouts.admin')
@section('content')
    <div class="x_panel">
        <div class="x_title">
            <h2>Chỉnh sửa {{ $title }} <small>Chỉnh sửa thông tin</small></h2>
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Settings 1</a>
                        <a class="dropdown-item" href="#">Settings 2</a>
                    </div>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a></li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <br />
            <form class="form-horizontal form-label-left" method="POST" enctype="multipart/form-data" action="{{ route('listing.update', ['model' => $modelName, 'id' => $record->id]) }}">
                @csrf
                @method('PUT')
                @foreach ($configs as $config)
                    @if (isset($config['editing']) && $config['editing'])
                    <div class="form-group row">
                            <label class="control-label col-md-3 col-sm-3">{{ $config['name'] }}</label>
                            <div class="col-md-9 col-sm-9">
                                @if ($config['type'] === 'text')
                                    <input type="text" class="form-control" name="{{ $config['field'] }}" value="{{ old($config['field'], $record->{$config['field']}) }}" placeholder="{{ htmlspecialchars($config['name']) }}" />
                                @elseif ($config['type'] === 'number')
                                    <input type="text" class="form-control" name="{{ $config['field'] }}" value="{{ old($config['field'], $record->{$config['field']}) }}" placeholder="{{ htmlspecialchars($config['name']) }}" />
                                @elseif ($config['type'] === 'image')
                                    <input type="file" name="{{ $config['field'] }}" />
                                @elseif ($config['type'] === 'ckeditor')
                                    <textarea id="{{ $config['field'] }}" name="{{ $config['field'] }}" class="form-control ckeditor" rows="3" placeholder="{{ htmlspecialchars($config['name']) }}">{{ old($config['field'], $record->{$config['field']}) }}</textarea>
                                @elseif ($config['type'] === 'date')
                                    <input type="date" class="form-control" name="{{ $config['field'] }}" value="{{ old($config['field'], $record->{$config['field']}) }}" placeholder="{{ htmlspecialchars($config['name']) }}" />
                                @endif

                            </div>
                        </div>
                    @endif
                @endforeach
                <div class="form-group">
                    <div class="col-md-9 col-sm-9 offset-md-3">
                        <button type="submit" class="btn btn-success">Lưu</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
