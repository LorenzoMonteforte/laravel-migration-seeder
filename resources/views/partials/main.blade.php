<main>
    @for ($i=0; $i<sizeof($trains); $i++)
        <ul>
            <li>ID:{{ $trains[$i]["id"] }}</li>
            <li>Compagnia: {{ $trains[$i]["company"] }}</li>
            <li>Stazione di partenza: {{ $trains[$i]["departure_station"] }}</li>
            <li>Stazione di arrivo: {{ $trains[$i]["arrival_station"] }}</li>
            <li>Orario di partenza: {{ $trains[$i]["departure_time"] }}</li>
            <li>Orario di arrivo: {{ $trains[$i]["arrival_time"] }}</li>
            <li>Codice treno: {{ $trains[$i]["train_code"] }}</li>
            <li>Numero di carrozze: {{ $trains[$i]["carriages_number"] }}</li>
            @if ($trains[$i]["in_time"] == 0)
                <li>In orario? No</li>
            @else
                <li>In orario? Si</li>
            @endif
            @if ($trains[$i]["deleted"] == 0)
                <li>Cancellato? No</li>
            @else
                <li>Cancellato? Si</li>
            @endif
        </ul>
    @endfor
</main>