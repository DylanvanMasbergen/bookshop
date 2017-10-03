

<h2><?php echo $title; ?></h2>
 
<?php echo validation_errors(); ?>
 
<?php echo form_open('books/create'); ?>    
    <table>
        <tr>
            <td><label for="title">Title</label></td>
            <td><input type="input" name="title" size="50" /></td>
        </tr>
        <tr>
            <td><label for="author">Author</label></td>
            <td><textarea name="author" rows="2" cols="40"></textarea></td>
        </tr>
        <tr>
            <td><label for="genre">Genre</label></td>
            <td><textarea name="genre" rows="2" cols="40"></textarea></td>
        </tr>
        <tr>
            <td><label for="year">Year</label></td>
            <td><textarea name="year" rows="2" cols="40"></textarea></td>
        </tr>
        <tr>
            <td><label for="description">Description</label></td>
            <td><textarea name="description" rows="10" cols="40"></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Create book item" /></td>
        </tr>
    </table>    
</form>



