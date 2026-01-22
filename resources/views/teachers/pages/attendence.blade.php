<x-teacher-layout>
    <style>
    .card {
        background: #fff;
        border-radius: 12px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.08);
        padding: 20px;
        max-width: 900px;
        margin: auto;
    }
    h3 {
        margin-bottom: 1rem;
        text-align: center;
        color: #5a35a5;
    }
    table {
        width: 100%;
        border-collapse: collapse;
    }

    thead th {
        text-align: center;
        padding: 15px;
        font-size: 16px;
        border-bottom: 2px solid #916EB0;
    }

    thead th:first-child {
        text-align: left;
    }

    /* 🔹 Vertical lines between columns */
    th, td {
        border-right: 1px solid #916EB0;
    }

    th:last-child,
    td:last-child {
        border-right: none;
    }

    tbody td {
        padding: 15px;
        text-align: center;
        border-bottom: 1px solid #916EB0;
    }

    tbody td:first-child {
        text-align: left;
        font-weight: 500;
    }

    input[type="radio"] {
        transform: scale(1.2);
        accent-color: #6f42c1;
        cursor: pointer;
    }

    .btn-save {
        margin-top: 20px;
        background: #6f42c1;
        color: white;
        padding: 12px 25px;
        border: none;
        border-radius: 8px;
        float: right;
        font-size: 15px;
        cursor: pointer;
    }

    .btn-save:hover {
        background: #5a35a5;
    }
</style>
    <div class="card">
    <h3>Attendance</h3>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Present</th>
                <th>Absent</th>
                <th>Leave</th>
            </tr>
        </thead>

        <tbody>
            <!-- 10 Students -->
            <tr>
                <td>Ali Khan</td>
                <td><input type="radio" name="s1"></td>
                <td><input type="radio" name="s1"></td>
                <td><input type="radio" name="s1"></td>
            </tr>

            <tr>
                <td>Ahmed Raza</td>
                <td><input type="radio" name="s2"></td>
                <td><input type="radio" name="s2"></td>
                <td><input type="radio" name="s2"></td>
            </tr>

            <tr>
                <td>Usman Ali</td>
                <td><input type="radio" name="s3"></td>
                <td><input type="radio" name="s3"></td>
                <td><input type="radio" name="s3"></td>
            </tr>

            <tr>
                <td>Hassan Khan</td>
                <td><input type="radio" name="s4"></td>
                <td><input type="radio" name="s4"></td>
                <td><input type="radio" name="s4"></td>
            </tr>

            <tr>
                <td>Bilal Ahmed</td>
                <td><input type="radio" name="s5"></td>
                <td><input type="radio" name="s5"></td>
                <td><input type="radio" name="s5"></td>
            </tr>

            <tr>
                <td>Saad Malik</td>
                <td><input type="radio" name="s6"></td>
                <td><input type="radio" name="s6"></td>
                <td><input type="radio" name="s6"></td>
            </tr>

            <tr>
                <td>Fahad Iqbal</td>
                <td><input type="radio" name="s7"></td>
                <td><input type="radio" name="s7"></td>
                <td><input type="radio" name="s7"></td>
            </tr>

            <tr>
                <td>Imran Shah</td>
                <td><input type="radio" name="s8"></td>
                <td><input type="radio" name="s8"></td>
                <td><input type="radio" name="s8"></td>
            </tr>

            <tr>
                <td>Kamran Ali</td>
                <td><input type="radio" name="s9"></td>
                <td><input type="radio" name="s9"></td>
                <td><input type="radio" name="s9"></td>
            </tr>

            <tr>
                <td>Salman Riaz</td>
                <td><input type="radio" name="s10"></td>
                <td><input type="radio" name="s10"></td>
                <td><input type="radio" name="s10"></td>
            </tr>
        </tbody>
    </table>

    <button class="btn-save">Save Attendance</button>
</div>
</x-teacher-layout>