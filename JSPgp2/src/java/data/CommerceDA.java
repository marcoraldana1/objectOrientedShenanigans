/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package data;


import business.Product;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.ArrayList;

/**
 *
 * @author fssco
 */
public class CommerceDA {  
    // initial records added to db
    public static void initializeDB() {
//        ArrayList<Product> all = new ArrayList<Product>();
//        all.add(new Product("Aaron", "A", "Aaronson", "65",
//                           LocalDate.of(1980, Month.JANUARY, 1), LocalDate.of(2013, Month.JANUARY, 2)));
//        

//        for (Product emp : all) {
//            addEmployee(emp);
//        }
    }
    
    // products table 
    
    // returns list of all products from db
    public static ArrayList<Product> getAllProducts() {
        ArrayList<Product> all = new ArrayList<Product>();
        
        ConnectionPool pool = ConnectionPool.getInstance();
        Connection connection = pool.getConnection();
        PreparedStatement ps = null;
        ResultSet rs = null;

        String query = "SELECT * FROM products";
        try {
            ps = connection.prepareStatement(query);            
            rs = ps.executeQuery();
            Product product = null;
            while (rs.next()) {
                product = new Product();                
                product.setCategory(rs.getString("category"));
                product.setProductID(rs.getInt("productid"));
                product.setPrice(rs.getDouble("price"));
                product.setName("" + rs.getString("name"));
                product.setDescription(rs.getString("description"));
                product.setImagePath(rs.getString("imagepath"));
                all.add(product);                
            }
            return all;
        } catch (SQLException e) {
            System.out.println(e);
            return null;
        } finally {
            DBUtil.closeResultSet(rs);
            DBUtil.closePreparedStatement(ps);
            pool.freeConnection(connection);
        }
    }
    
    // adds a product object to the db
    public static int addProduct(Product prod) {
        ConnectionPool pool = ConnectionPool.getInstance();
        Connection connection = pool.getConnection();
        PreparedStatement ps = null;

        String query = "insert into products " +
                       "(category, price, name, description, imagepath) " +
                       "values (?, ?, ?, ?, ?)";
        
        try {
            ps = connection.prepareStatement(query);
            ps.setString(1, prod.getCategory());
            ps.setDouble(2, prod.getPrice());
            ps.setString(3, prod.getName());
            ps.setString(4, prod.getDescription());
            ps.setString(5, prod.getImagePath());
            
            return ps.executeUpdate();
        } catch (SQLException e) {
            System.out.println(e);
            return 0;
        } catch (NumberFormatException e) {
            System.out.println(e);
            return 0;
        } 
        finally {
            DBUtil.closePreparedStatement(ps);
            pool.freeConnection(connection);
        }
    }
    
    // adds product objects from list to db
    public static int addProducts(ArrayList<Product> prodList) {
        int recordsAdded = 0;
        for (Product prod : prodList)
        {
            recordsAdded += addProduct(prod);
        }
        return recordsAdded;
    }
    
    // deletes product object from db
    public static int deleteProduct(Product prod) {   
        ConnectionPool pool = ConnectionPool.getInstance();
        Connection connection = pool.getConnection();
        PreparedStatement ps = null;

        String query = "DELETE FROM products "
                + "WHERE productid = ?";
        try {
            ps = connection.prepareStatement(query);
            ps.setInt(1, prod.getProductID());

            return ps.executeUpdate();
        } catch (SQLException e) {
            System.out.println(e);
            return 0;
        } finally {
            DBUtil.closePreparedStatement(ps);
            pool.freeConnection(connection);
        }
    }
    
    // returns product object from db with specified employeeID
    public static Product getProduct(int productID) {   
        ConnectionPool pool = ConnectionPool.getInstance();
        Connection connection = pool.getConnection();
        PreparedStatement ps = null;
        ResultSet rs = null;

        String query = "SELECT * FROM products "
                + "WHERE productid = ?";
        try {
            ps = connection.prepareStatement(query);
            ps.setInt(1, productID);
            rs = ps.executeQuery();
            Product p = null;
            if (rs.next()) {
                p = new Product();
                p.setCategory(rs.getString("category"));
                p.setProductID(rs.getInt("productid"));
                p.setPrice(rs.getDouble("price"));
                p.setName("" + rs.getString("name"));
                p.setDescription(rs.getString("description"));
                p.setImagePath(rs.getString("imagepath"));
            }
            return p;
        } catch (SQLException e) {
            System.out.println(e);
            return null;
        } finally {
            DBUtil.closeResultSet(rs);
            DBUtil.closePreparedStatement(ps);
            pool.freeConnection(connection);
        }
    }
    
    public static int updateProduct(Product prod) {
        ConnectionPool pool = ConnectionPool.getInstance();
        Connection connection = pool.getConnection();
        PreparedStatement ps = null;
        ResultSet rs = null;

        String query = "UPDATE products " +
                "SET category = ?, " + 
                "price = ?, " + 
                "name = ?, " +
                "description = ? " +   
                "imagepath = ? " +
                "WHERE productid = ?";
        try {
            ps = connection.prepareStatement(query);
            ps.setString(1, prod.getCategory());
            ps.setDouble(2, prod.getPrice());
            ps.setString(3, prod.getName());
            ps.setString(4, prod.getDescription());
            ps.setString(5, prod.getImagePath());
            ps.setInt(6, prod.getProductID());
            return ps.executeUpdate();                        
        } catch (SQLException e) {
            System.out.println(e);
            return 0;
        } finally {
            DBUtil.closeResultSet(rs);
            DBUtil.closePreparedStatement(ps);
            pool.freeConnection(connection);
        }
    }
    
    
    // customers table
    
    // returns list of all customers
//    public static ArrayList<Customer> getAllCustomers()
//    {
//        ArrayList<Customer> all = new ArrayList<Customer>();
//        
//        ConnectionPool pool = ConnectionPool.getInstance();
//        Connection connection = pool.getConnection();
//        PreparedStatement ps = null;
//        ResultSet rs = null;
//
//        String query = "SELECT * FROM customers";
//        try {
//            ps = connection.prepareStatement(query);            
//            rs = ps.executeQuery();
//            Product product = null;
//            while (rs.next()) {
//                customer = new Customer();                
//                customer.setCategory(rs.getInt("customerid"));
//                customer.setProductID(rs.getString("firstname"));
//                customer.setPrice(rs.getString("lastname"));
//                customer.setName("" + rs.getString("address"));
//                customer.setDescription(rs.getString("phone"));
//                customer.setImagePath(rs.getString("email"));
//                all.add(customer);                
//            }
//            return all;
//        } catch (SQLException e) {
//            System.out.println(e);
//            return null;
//        } finally {
//            DBUtil.closeResultSet(rs);
//            DBUtil.closePreparedStatement(ps);
//            pool.freeConnection(connection);
//        }
//    }
//    
//    // return customer by id
//    public static Customer getCustomer(int customerid)
//    {
//        ConnectionPool pool = ConnectionPool.getInstance();
//        Connection connection = pool.getConnection();
//        PreparedStatement ps = null;
//        ResultSet rs = null;
//
//        String query = "SELECT * FROM customers "
//                + "WHERE customerid = ?";
//        try {
//            ps = connection.prepareStatement(query);
//            ps.setInt(1, customerid);
//            rs = ps.executeQuery();
//            Customer customer = null;
//            if (rs.next()) {
//                customer = new Customer();                
//                customer.setCategory(rs.getInt("customerid"));
//                customer.setProductID(rs.getString("firstname"));
//                customer.setPrice(rs.getString("lastname"));
//                customer.setName("" + rs.getString("address"));
//                customer.setDescription(rs.getString("phone"));
//                customer.setImagePath(rs.getString("email"));
//            }
//            return customer;
//        } catch (SQLException e) {
//            System.out.println(e);
//            return null;
//        } finally {
//            DBUtil.closeResultSet(rs);
//            DBUtil.closePreparedStatement(ps);
//            pool.freeConnection(connection);
//        }
//    }
//    
//    // add customer
//    public static int addCustomer(Customer customer)
//    {
//        ConnectionPool pool = ConnectionPool.getInstance();
//        Connection connection = pool.getConnection();
//        PreparedStatement ps = null;
//
//        String query = "insert into customers " +
//                       "(customerid, firstname, lastname, address, phone, email) " +
//                       "values (?, ?, ?, ?, ?, ?)";
//        
//        try {
//            ps = connection.prepareStatement(query);
//            ps.setInt(1, customer.getCustomerID());
//            ps.setString(2, customer.getFirstName());
//            ps.setString(3, customer.getLastName());
//            ps.setString(4, customer.getAddress());
//            ps.setString(5, customer.getPhone());
//            ps.setString(6, customer.getEmail());
//            
//            return ps.executeUpdate();
//        } catch (SQLException e) {
//            System.out.println(e);
//            return 0;
//        } catch (NumberFormatException e) {
//            System.out.println(e);
//            return 0;
//        } 
//        finally {
//            DBUtil.closePreparedStatement(ps);
//            pool.freeConnection(connection);
//        }
//    }
//    
//    // update customer
//    public static int updateCustomer(Customer customer)
//    {
//        ConnectionPool pool = ConnectionPool.getInstance();
//        Connection connection = pool.getConnection();
//        PreparedStatement ps = null;
//        ResultSet rs = null;
//
//        String query = "UPDATE customers " +                 
//                "SET firstname = ?, " + 
//                "lastname = ?, " +
//                "address = ? " +   
//                "email = ? " +
//                "WHERE customerid = ?";
//        try {
//            ps = connection.prepareStatement(query);            
//            ps.setString(1, customer.getFirstName());
//            ps.setString(2, customer.getLastName());
//            ps.setString(3, customer.getAddress());
//            ps.setString(4, customer.getPhone());
//            ps.setString(5, customer.getEmail());
//            ps.setInt(6, customer.getCustomerID());
//            return ps.executeUpdate();                        
//        } catch (SQLException e) {
//            System.out.println(e);
//            return 0;
//        } finally {
//            DBUtil.closeResultSet(rs);
//            DBUtil.closePreparedStatement(ps);
//            pool.freeConnection(connection);
//        }
//    }
    
    
    // orders/lineitems tables
    
}
