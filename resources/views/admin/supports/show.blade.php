@extends('admin.layouts.app')
@section('title', 'Detalhes')

@section('container')
<div class="flex justify-center h-full">
    <div class="indicator m-auto ">
        <span class="indicator-item indicator-start  badge badge-warning p-2">
            Status: {{ $support->status }}
        </span>

        <div class="card w-96  bg-neutral text-primary-content grid bg-base-200 place-items-center shadow-2xl">
            <div class="card-body">
                <h2 class="card-title m-auto">
                    Detalhes da Dúvida #{{ $support->id }}
                </h2>
                <div class="divider"></div>
                <h3 class="text-xl m-auto">
                    {{ $support->subject }}
                </h3>
                <p class="bg-neutral-focus m-2 p-2 rounded ">
                    {{ $support->body }}
                </p>
                <div class="indicator-item  indicator-bottom indicator-center badge">
                    <form action="{{ route('supports.destroy', $support->id) }}" method="POST" class="m-2">
                        @csrf()
                        @method('DELETE')
                        <button type="submit">
                            <button class="btn btn-error">
                                Deletar
                            </button>
                        </button>
                    </form>

                </div>
                <div class="indicator-item">
                    <a href="{{ route('supports.index') }}">
                        <button class="btn btn-square btn-primary hover:btn-error mx-5">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection