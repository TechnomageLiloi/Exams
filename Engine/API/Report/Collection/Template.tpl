<style>
    #problem-group table
    {
        width: 100%;
    }

    #problem-group table td
    {
        border-bottom: silver 1px dashed;
        padding-bottom: 5px;
    }

    #problem-group table tr:hover
    {
        background-color: #e5ffe0;
    }

</style>
<div id="problem-group">
    <table>
        <tr>
            <th>Result</th>
            <th>Comment</th>
            <th>Data</th>
            <th style="text-align: right;">Actions</th>
        </tr>
        <?php foreach($collection as $entity): ?>
        <tr>
            <td><?php echo $entity->getResult(); ?></td>
            <td><?php echo $entity->getComment(); ?></td>
            <td><?php echo $entity->getData(); ?></td>
            <td style="text-align: right; width: 300px;">

            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>