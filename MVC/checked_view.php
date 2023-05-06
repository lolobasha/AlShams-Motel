<?php
class CheckedView
{

    function showCheckedDetails($Stobj)
    {
        echo '<style>
        table {
            border-collapse: collapse;
            margin: 20px 0;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
            font-size: 14px;
        }
        th {
            background-color: #f2f2f2;
            font-weight: bold;
            color: #444;
        }
        .print-button {
            display: inline-block;
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            font-size: 14px;
            border-radius: 5px;
            margin-top: 20px;
        }
    </style>';
    echo '<h1>Receipt</h1>';
    echo '<table>';
    echo '<tr><th>ID:</th><td>' . $Stobj->Id . '</td></tr>';
    echo '<tr><th>Reference Number:</th><td>' . $Stobj->Ref_no . '</td></tr>';
    echo '<tr><th>Room ID:</th><td>' . $Stobj->Room_id . '</td></tr>';
    echo '<tr><th>Name:</th><td>' . $Stobj->Name . '</td></tr>';
    echo '<tr><th>Contact Number:</th><td>' . $Stobj->Contact_no . '</td></tr>';
    echo '<tr><th>Date In:</th><td>' . $Stobj->Date_in . '</td></tr>';
    echo '<tr><th>Date Out:</th><td>' . $Stobj->Date_out . '</td></tr>';
    echo '<tr><th>Booked CID:</th><td>' . $Stobj->Booked_cid . '</td></tr>';
    echo '<tr><th>Status:</th><td>' . $Stobj->Status . '</td></tr>';
    echo '<tr><th>Date Updated:</th><td>' . $Stobj->Date_updated . '</td></tr>';
    echo '</table>';

    echo '<button class="print-button" onclick="window.print()">Print</button>';
    }

}
?>
