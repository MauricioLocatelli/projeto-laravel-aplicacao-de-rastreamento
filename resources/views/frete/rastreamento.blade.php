<x-layout>
    <div class="max-w-full mt-8 mx-auto bg-white rounded-lg shadow-sm">
        <div class="text-center p-6 bg-gradient-to-r from-blue-500 to-purple-600 text-white rounded-t-lg">
            <h1 class="text-3xl font-bold">
                Rastreamento Encomenda
            </h1>
            <p class="mt-4 text-lg">
                Código de Rastreamento: <span class="font-semibold">{{ $frete -> codigo_rastreio}}</span>
            </p>
            <p class="mt-2">
                Status: 
                <span class="px-2 py-1 rounded-full {{ $frete -> status -> pegarCorEtiqueta() }}"">
                    {{ $frete -> status }}
                </span>
            </p>
            <p class="mt-2">
                Destino: <span class="font-semibold">{{ $frete -> destino }}</span>
            </p>
        </div>
    
        <table class="w-full text-sm text-left">
            <thead>
                <tr class="border-b">
                    <th class="px-6 py-4 font-semibold text-gray-900">
                        Descrição
                    </th>
                    <th class="px-6 py-4 font-semibold text-gray-900">
                        Data
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($frete -> etapas as $etapa)    
                    <tr class="hover:bg-gray-50 transition-colors border-b">
                        <td class="px-6 py-4">
                            {{ $etapa -> descricao }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                        {{ $etapa -> created_at->timezone('America/Sao_Paulo')->format('d/m/Y h:i');}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>
    