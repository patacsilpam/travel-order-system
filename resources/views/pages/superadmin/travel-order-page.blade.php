<div class="p-2 relative">
    <div>
        <h1>Travel Orders</h1>
    </div><br><br>
    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Travel Order #</th>
                <th scope="col">Fund Cluster</th>
                <th scope="col">Name</th>
                <th scope="col">Date of Travel (Filing)</th>
                <th scope="col">Destination</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>2024-01-26</td>
                <td>01-RF</td>
                <td>Juan Dela Cruz</td>
                <td>01-03-2024</td>
                <td>San Nicolas, Pangasinan and Laoag City, Ilocos Norte</td>
                <td><a href="#viewpdf" class="btn text-white" style="background:#3354F4">View PDF</a></td>
            </tr>
            
        </tbody>
    </table>
</div>
<script>
    new DataTable('#example');
</script>