<div>
    <h1>{{ $organisation }}</h1>

    <table border="1">
        <tr>
            <th>
                Id
            </th>

            <th>
                Name
            </th>

            <th>
                Salary
            </th>
        </tr>
        @foreach($jobs as $job)

        <tr>
            <td>
                {{ $job["id"] }}
            </td>

            <td>
                {{ $job["name"] }}
            </td>

            <td>
                {{ $job["salary"] }}
            </td>
            
        </tr>

        @endforeach

    </table>
</div>
