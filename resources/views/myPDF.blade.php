<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="style.css" />
        <title>MTU MIS</title>
    </head>


    <body>

    <table table-striped table-bordered style="width:100%">
    <caption> <H2>MOUNTAIN TOP UNIVERSITY<br>
    MIS PDF INFO</H2></caption>
            <tr>
                <th>REGISTRATION NUMBER</th>
                <th>{{ Auth::user()->matriculation_number }}</th>

            </tr>

            <tr>
                <td colspan="2">
                {{ Auth::user()->email }}
                </td>

            </tr>

            <tr>
                <td>
                LAST NAME:

                </td>
                <td>  {{ Auth::user()->lastname }} </td>

            </tr>

            <tr>
                <td>
                OTHER NAMES:

                </td>
                <td>{{ Auth::user()->firstname }} {{ Auth::user()->middlename }}</td>

            </tr>



            <tr>
                <td>
                COLLEGE
                </td>
                <td>{{ Auth::user()->college }}</td>

            </tr>

           <tr>
                <td>
                DEPARTMENT:
                </td>
                <td>{{ Auth::user()->department }}</td>

            </tr>


            <tr>
                <td>
                SESSION

                </td>
                <td>{{ Auth::user()->academic_session }} </td>

            </tr>

   <tr>
                <td>
                SEMESTER:

                </td>
                <td> 1ST</td>

            </tr>
            <tr>
                <td><b><b>Religion</b> </b></td>
                <td>{{ Auth::user()->religion}} </td>

            <tr>



  <tr>
    <th rowspan="3">Devomination/Region</th>
    <td>{{ Auth::user()->denominations}}</td>
  </tr>
  <tr>
    <td>{{ Auth::user()->region }} </td>
</tr>
<tr>
    <td>{{ Auth::user()->clocation }} </td>
</tr>
<tr>

    <td><b>Church Parish</b> </td>
    <td>{{ Auth::user()->parish }} </td>
</tr>

<tr>
    <td><b>Parents </b> </td>
    <td>{{ Auth::user()->parents }} </td>
</tr>



    <tr>
        <th rowspan="3">Nationality/State/LGA</th>
        <td>{{ Auth::user()->nationality}}</td>
      </tr>
      <tr>
        <td>{{ Auth::user()->stateoforigin}} </td>
    </tr>
    <tr>
        <td>{{ Auth::user()->localgovt }} </td>
    </tr>

<tr>
    <td><b>Residence</b></td>
    <td>{{ Auth::user()->address_state}} </td>
</tr>



<tr>
    <td><b>Gender</b></td>
    <td>{{ Auth::user()->gender}} </td>
</tr>



<tr>
    <td><b>Entry Year</b></td>
    <td>{{ Auth::user()->entryyear }} </td>
</tr>



<tr>
                <td>
                Registration Date

                </td>
                <td>{{ Auth::user()->created_at->toDayDateTimeString() }}  </td>

            </tr>

            <tr>
            <td>
                Printable Date:

                </td>
                <td> {{ $current_time = \Carbon\Carbon::now()->toDayDateTimeString() }} </td>

            </tr>
        </table>
    </body>

</html>

<style>

table tr:nth-child(even) {
    background-color: #f2f2f2;
}
    .first-data {
    text-align: left;
}

.second-data {
    text-align: right;
}

.third-data {
    text-align: center;
}

.fourth-data {
    text-align: center;
}

table {
    width: 100%;
    border-collapse: collapse;
}

table,th,td {
    border: 1px solid black;
}


/* styles table with fixed layout */
table {
    width: 500px;
    table-layout: fixed;
}

table, th , td {
    border: 1px solid black;
    border-collapse: collapse;
}
</style>
