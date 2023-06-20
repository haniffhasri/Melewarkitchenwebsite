<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
</head>
<body>
    <h1>Admin Panel</h1>

    <?php
    // Simulated data for tables and reservations
    $tables = [
        ['id' => 1, 'name' => 'Table 1', 'availability' => true, 'reservations' => []],
        ['id' => 2, 'name' => 'Table 2', 'availability' => false, 'reservations' => []],
        ['id' => 3, 'name' => 'Table 3', 'availability' => true, 'reservations' => []],
        // Add more tables as needed
    ];

    $reservations = [
        ['id' => 1, 'name' => 'John Doe', 'table_id' => 1, 'menu_items' => ['Item 1', 'Item 2']],
        ['id' => 2, 'name' => 'Jane Smith', 'table_id' => 2, 'menu_items' => ['Item 3']],
        ['id' => 3, 'name' => 'David Johnson', 'table_id' => 1, 'menu_items' => ['Item 1', 'Item 4']],
        // Add more reservations as needed
    ];

    // Function to check the availability of a table
    function isTableAvailable($tableId, $tables)
    {
        foreach ($tables as $table) {
            if ($table['id'] == $tableId) {
                return $table['availability'];
            }
        }
        return false; // Table not found
    }

    // Function to get reservations for a table
    function getReservationsForTable($tableId, $reservations)
    {
        $tableReservations = [];
        foreach ($reservations as $reservation) {
            if ($reservation['table_id'] == $tableId) {
                $tableReservations[] = $reservation;
            }
        }
        return $tableReservations;
    }

    // Process form submission to update table availability
    if (isset($_POST['table_id']) && isset($_POST['availability'])) {
        $tableId = $_POST['table_id'];
        $availability = $_POST['availability'];

        // Update table availability
        foreach ($tables as &$table) {
            if ($table['id'] == $tableId) {
                $table['availability'] = ($availability == 'true');
                break;
            }
        }
    }
    ?>

    <h2>Manage Tables</h2>

    <table>
        <tr>
            <th>Table Name</th>
            <th>Availability</th>
            <th>Reservations</th>
        </tr>
        <?php foreach ($tables as $table) : ?>
            <tr>
                <td><?php echo $table['name']; ?></td>
                <td>
                    <form action="admin.php" method="post">
                        <input type="hidden" name="table_id" value="<?php echo $table['id']; ?>">
                        <select name="availability">
                            <option value="true" <?php if ($table['availability']) echo 'selected'; ?>>Available</option>
                            <option value="false" <?php if (!$table['availability']) echo 'selected'; ?>>Not Available</option>
                        </select>
                        <input type="submit" value="Update">
                    </form>
                </td>
                <td>
                    <?php
                    $tableReservations = getReservationsForTable($table['id'], $reservations);
                    if (!empty($tableReservations)) {
                        foreach ($tableReservations as $reservation) {
                            echo $reservation['name'] . '<br>';
                            echo 'Menu Items: ' . implode(', ', $reservation['menu_items']) . '<br>';
                            echo '---<br>';
                        }
                    } else {
                        echo 'No reservations';
                    }
                    ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

</body>
</html>