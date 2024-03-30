@extends('vendor.layouts.main')

@section('content')

<div class="nav-tabs">
    <button class="tablink active" onclick="openTab('All')">All</button>
    <button class="tablink" onclick="openTab('Completed')">Completed</button>
    <button class="tablink" onclick="openTab('Processing')">Processing</button>
    <button class="tablink" onclick="openTab('Confirmed')">Confirmed</button>
    <button class="tablink" onclick="openTab('Cancelled')">Cancelled</button>
    <button class="tablink" onclick="openTab('Paid')">Paid</button>
    <button class="tablink" onclick="openTab('Unpaid')">Unpaid</button>
    <button class="tablink" onclick="openTab('Partial')">Partial Payment</button>
</div>

<!-- Table -->
<table id="bookingTable">
    <thead>
        <tr>
            <th>Type</th>
            <th>Title</th>
            <th>Order Date</th>
            <th>Execution Time</th>
            <th>Total</th>
            <th>Paid</th>
            <th>Remain</th>
        </tr>
    </thead>
    <tbody>
        <tr id="booking1" style="display: table-row;">
            <td>Single</td>
            <td>Standard Room</td>
            <td>2024-03-30</td>
            <td>2 Nights</td>
            <td>$200</td>
            <td>$100</td>
            <td>$100</td>
        </tr>
        <tr id="booking2" style="display: none;">
            <td>Double</td>
            <td>Deluxe Suite</td>
            <td>2024-03-28</td>
            <td>3 Nights</td>
            <td>$400</td>
            <td>$400</td>
            <td>$0</td>
        </tr>
        <!-- Add more dummy data as needed -->
    </tbody>
</table>

<!-- Add your JavaScript for tab functionality here -->
<script>
    function openTab(tabName) {
        // Hide all table rows
        var tableRows = document.getElementById("bookingTable").getElementsByTagName("tbody")[0].getElementsByTagName("tr");
        for (var i = 0; i < tableRows.length; i++) {
            tableRows[i].style.display = "none";
        }
        
        // Remove active class from all tabs
        var tablinks = document.getElementsByClassName("tablink");
        for (var i = 0; i < tablinks.length; i++) {
            tablinks[i].classList.remove("active");
        }
        
        // Show only the table rows corresponding to the selected tab
        document.getElementById(tabName).style.display = "table-row";
        
        // Add active class to the selected tab
        document.getElementById(tabName).classList.add("active");
    }
</script>
@endsection