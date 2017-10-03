<h2><?php echo $title; ?></h2>

<div class="tbl-header">
<table border='1' cellpadding='4'>
    <tr>
        <th><strong>Title</strong></th>
        <th><strong>Description</strong></th>
        <th><strong>Action</strong></th>
    </tr>
    </table>
</div>
<div class="tbl-content">
<?php foreach ($books as $book): ?>
    <table>
        <tr>
            <td><?php echo $book['title']; ?></td>
            <td><?php echo $book['description']; ?></td>
            <td>
                <a href="<?php echo site_url('books/'.$book['slug']); ?>">View</a> | 
                <a href="<?php echo site_url('books/edit/'.$book['id']); ?>">Edit</a> | 
                <a href="<?php echo site_url('books/delete/'.$book['id']); ?>" onClick="return confirm('Are you sure you want to delete?')">Delete</a>
            </td>
        </tr>
<?php endforeach; ?>
</table>
</div>
