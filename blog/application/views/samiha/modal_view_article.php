<table class="table table-bordered">
    <thead>
        <tr>
            <th>Name</th>
            <th>Content</th>
        </tr>
    </thead>
    <tbody>
    <?php
        $article_details = $this->db->get_where('article', array('article_id' => $param2))->result_array();
        foreach ($article_details as $article_detail):
    ?>
        <tr>
            <td>Name</td>
            <td><?php echo $article_detail['name']; ?></td>
        </tr>
        <tr>
            <td>Permalink</td>
            <td><?php echo $article_detail['permalink']; ?></td>
        </tr>
        <tr>
            <td>Times</td>
            <td><?php echo $article_detail['times']; ?></td>
        </tr>
        <tr>
            <td>Ambience</td>
            <td><?php echo $article_detail['ambience']; ?></td>
        </tr>
        <tr>
            <td>Food Review</td>
            <td><?php echo $article_detail['food_review']; ?></td>
        </tr>
        <tr>
            <td>Preview</td>
            <td><?php echo $article_detail['preview']; ?></td>
        </tr>
        <tr>
            <td>Beverages</td>
            <td><?php echo $article_detail['beverages']; ?></td>
        </tr>
        <tr>
            <td>Service</td>
            <td><?php echo $article_detail['service']; ?></td>
        </tr>
        <tr>
            <td>Additional Notes</td>
            <td><?php echo $article_detail['additional_notes']; ?></td>
        </tr>
        <tr>
            <td>Category</td>
            <td><?php echo $this->db->get_where('category', array('category_id' => $article_detail['category_id']))->row()->name; ?></td>
        </tr>
        <tr>
            <td>Restaurant</td>
            <td><?php echo $this->db->get_where('restaurant', array('restaurant_id' => $article_detail['restaurant_id']))->row()->name; ?></td>
        </tr>
        <tr>
            <td>Love</td>
            <td><?php echo $article_detail['love']; ?></td>
        </tr>
        <tr>
            <td>Written On</td>
            <td><?php echo date('d M, Y', $article_detail['timestamp']); ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
