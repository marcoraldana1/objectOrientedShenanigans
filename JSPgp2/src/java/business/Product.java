package business;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author dn575242
 */


public class Product {

    private String category;
    private int productID;
    private double price;
    private String name;
    private String description;
    private String imagePath;
    /**
     * @return the category
     */
    public String getCategory() {
        return category;
    }

    /**
     * @return the id
     */
    public int getProductID() {
        return productID;
    }

    /**
     * @return the price
     */
    public double getPrice() {
        return price;
    }

    /**
     * @return the name
     */
    public String getName() {
        return name;
    }

    /**
     * @param name the name to set
     */
    public void setName(String name) {
        this.name = name;
    }

    /**
     * @return the description
     */
    public String getDescription() {
        return description;
    }

    /**
     * @param category the category to set
     */
    public void setCategory(String category) {
        this.category = category;
    }

    /**
     * @param id the id to set
     */
    public void setProductID(int productID) {
        this.productID = productID;
    }

    /**
     * @param price the price to set
     */
    public void setPrice(double price) {
        this.price = price;
    }

    /**
     * @param description the description to set
     */
    public void setDescription(String description) {
        this.description = description;
    }

    /**
     * @return the image
     */
    public String getImagePath() {
        return imagePath;
    }

    /**
     * @param image the image to set
     */
    public void setImagePath(String imagePath) {
        this.imagePath = imagePath;
    }
   
    
    
}
