@extends('admin.layouts.app')
@section('title', 'Detalhes')

@section('container')
    <div class="flex justify-center h-full">
        <div class="indicator m-auto ">
            <span class="indicator-item indicator-start  badge badge-warning">
                Status: {{ $support->status }}
            </span>
            <div class="card w-96  bg-primary text-primary-content grid bg-base-200 place-items-center shadow-2xl">
                <div class="card-body">
                    <h2 class="card-title m-auto">
                        Detalhes da duvida #{{ $support->id }}
                    </h2>
                    <div class="divider"></div>
                    <h3 class="text-xl m-auto">
                        {{ $support->subject }}
                    </h3>
                    <p class="bg-neutral m-2 p-2 rounded ">
                        {{ $support->body }}
                    </p>
                    <div class="indicator-item indicator-bottom ">
                        <a href="{{ route('supports.index') }}" class="btn btn-neutral">
                            Voltar
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
