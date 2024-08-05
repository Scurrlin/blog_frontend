<?php 
 include 'connection.php';

 $insert = "
INSERT INTO `products` (`id`, `name`, `price`, `product_detail`, `image`) VALUES
(2, 'Clover Honey', '$8.00', 'Clover honey is a classic and widely popular honey, known for its mild, sweet flavor and light golden color. Harvested from clover flowers, this honey is rich in floral notes and has a smooth texture. Its versatility makes it perfect for sweetening teas, drizzling over yogurt, or using as a natural sweetener in baking recipes. Clover honey is also an excellent choice for glazing meats and adding a touch of sweetness to dressings and sauces.', '9.png'),

(3, 'Wildflower Honey', '$9.00', 'Wildflower honey is a flavorful and aromatic honey, produced from the nectar of various wildflowers. The taste can vary depending on the season and the flowers in bloom, offering a unique flavor profile with each batch. This honey is dark and robust, with complex floral notes and a rich, slightly tangy finish. It's ideal for adding depth to teas, using in marinades, or simply enjoying on a slice of warm toast.', '0.jpg'),

(4, 'Acacia Honey', '$12.00', 'Acacia honey is renowned for its delicate, sweet flavor and light, almost transparent color. It is slow to crystallize, maintaining its liquid form longer than other types of honey. This makes it an excellent choice for drizzling over desserts, pancakes, or fresh fruit. Acacia honey’s mild taste complements a wide range of dishes without overpowering other flavors, making it a favorite among culinary enthusiasts.', '0.png'),

(5, 'Alfalfa Honey ', '$10.00', 'Alfalfa honey is light in color with a mild, slightly floral taste derived from the nectar of alfalfa blossoms. Its smooth texture and subtle sweetness make it ideal for sweetening beverages, spreading on toast, or incorporating into salad dressings. This honey’s gentle flavor profile is also perfect for use in baking, where it adds a touch of sweetness without altering the taste of the final product.', '1-1-330x300.png'),

(6, 'Buckwheat Honey', '$11.00', 'Buckwheat honey is dark and robust, boasting a strong, malty flavor that sets it apart from lighter varieties. It is rich in antioxidants and has a distinctive, almost molasses-like taste. This honey is perfect for those who enjoy a bolder honey flavor. It excels in baking and marinades, where its intense flavor can shine, and is also known for its health benefits, particularly in soothing coughs and sore throats.', '2.png'),

(7, 'Creamed Honey', '$10.00', 'Creamed honey, also known as whipped or spun honey, has a smooth, spreadable consistency achieved by controlling the crystallization process. It retains all the natural goodness of regular honey but in a delightful, easy-to-spread form. Perfect for spreading on bread, pastries, or crackers, creamed honey is also wonderful stirred into hot beverages or used as a dip for fresh fruits.', '3.png'),

(8, 'Manuka Honey', '$30.00', 'Manuka honey is a premium honey from New Zealand, known for its strong antibacterial properties and rich, earthy flavor. Derived from the nectar of the Manuka tree, this honey is often used for medicinal purposes and as a health supplement. Its robust flavor profile includes hints of caramel and herbs, making it a unique addition to teas, health tonics, or even as a healing topical application for minor wounds and skin conditions.', '3-1-330x300.jpg'),

(9, 'Eucalyptus Honey', '$13.00', 'Eucalyptus honey has a distinct, slightly medicinal taste with a hint of menthol, derived from the nectar of eucalyptus blossoms. This honey is often used in teas and for soothing sore throats due to its calming properties. Its unique flavor pairs well with herbal teas and can add an interesting twist to marinades and sauces.', '4-330x300.jpg'),

(10, 'Orange Blossom Honey', '$10.00', 'Orange blossom honey is light and aromatic, with a hint of citrus flavor that comes from the nectar of orange tree blossoms. This honey is excellent for sweetening teas, using in dressings, or drizzling over fresh fruit and desserts. Its delicate flavor also makes it a perfect companion for cheeses and charcuterie boards.', '5.png'),

(11, 'Baker's Special Honey', '$8.50', 'Baker’s special honey is a versatile, mild-flavored honey that is ideal for baking. Its consistent texture and flavor make it a reliable choice for a variety of recipes, from breads and muffins to cakes and cookies. This honey helps keep baked goods moist and adds a natural sweetness without altering the intended flavors.', '7.jpg'),

(12, 'Hot Honey', '$12.00', 'Hot honey is a fusion of natural honey and chili peppers, adding a spicy kick to the sweet, golden nectar. Perfect for drizzling over pizza, fried chicken, or cheese, hot honey adds a unique flavor dimension to both savory and sweet dishes. Its versatility makes it a must-have for any kitchen, adding heat and sweetness in perfect balance.', '6.png'),

(13, 'Lavender Honey', '$14.00', 'Lavender honey is aromatic and floral, infused with the delicate essence of lavender blossoms. This honey is wonderful for sweetening teas, baking, and using in gourmet recipes. Its soothing flavor and fragrance also make it ideal for pairing with cheeses, drizzling over desserts, or adding a touch of elegance to any dish.', '10.jpg'),

(14, 'Tupelo Honey', '$18.00', 'Tupelo honey is a rare and highly prized honey, known for its unique, buttery flavor and light golden color. It is slow to crystallize and maintains a smooth, liquid form longer than most honeys. Perfect for spreading, drizzling, or using as a sweetener in beverages, Tupelo honey is a gourmet delight with a loyal following.', '9-330x300.jpg'),

(15, 'Sage Honey', '$11.00', 'Sage honey has a mild, herbal flavor with a hint of sweetness, derived from the nectar of sage blossoms. It is light in color and excellent for sweetening teas, using in culinary dishes, or drizzling over roasted vegetables. Sage honey’s subtle taste makes it a versatile addition to any pantry.', '15-330x300.jpg'),

(16, 'Linden Honey', '$13.00', 'Linden honey, also known as basswood honey, has a fresh, woody taste with a hint of mint. It is light in color and great for sweetening teas and using in herbal remedies. This honey’s distinctive flavor pairs well with herbal teas and can enhance the taste of various dishes and desserts.', '14-330x300.jpg'),

(17, 'Dandelion Honey', '$15.00', 'Dandelion honey is unique and robust, with a slightly bitter aftertaste that sets it apart from other honeys. It is dark in color and rich in nutrients, making it a healthy addition to your diet. This honey is perfect for spreading on toast, using in baking, or adding a distinctive flavor to marinades and dressings.', '1.png'),

(18, 'Fireweed Honey', '$16.00', 'Fireweed honey is light and delicate, with a smooth texture and subtle, floral taste derived from the fireweed plant. It’s perfect for sweetening teas, spreading on toast, or using as a natural sweetener in recipes. Fireweed honey’s gentle flavor and light color make it a favorite among honey connoisseurs.', '12-330x300.jpg'),

(19, 'Chestnut  Honey', '$14.00', 'Chestnut honey is dark and strong-flavored, with a slightly bitter undertone that comes from the nectar of chestnut blossoms. It is rich in antioxidants and known for its bold, earthy taste. This honey is great for those who enjoy a more intense honey flavor and pairs well with cheeses, meats, and hearty breads.', '10-330x300.jpg');


 ";
 $result = mysqli_query($conn, $insert);
 if ($result) {
 	echo 'inserted';
 }
?>