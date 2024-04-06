<!-- A table for finance report, with filters etc -->

<span>Total revenue: €{{ $monthlyRevenue }}</span><br>
<span>Total sales: {{ $totalSales }}</span>
<form method="post">
    <input type="submit" name="action" value="Export as CSV">
</form>
