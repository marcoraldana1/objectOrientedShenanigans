/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package data;


import java.sql.Connection;
import java.sql.Date;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.time.LocalDate;
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
    
//    // returns list of all products from db
//    public static ArrayList<Product> getAllProducts() {
//        ArrayList<Product> all = new ArrayList<Product>();
//        
//        ConnectionPool pool = ConnectionPool.getInstance();
//        Connection connection = pool.getConnection();
//        PreparedStatement ps = null;
//        ResultSet rs = null;
//
//        String query = "SELECT * FROM products";
//        try {
//            ps = connection.prepareStatement(query);            
//            rs = ps.executeQuery();
//            Product product = null;
//            while (rs.next()) {
//                product = new Product();
//                product.setCategory(rs.getString("category"));
//                product.setProductID(rs.getInt("productid"));
//                product.setPrice(rs.getDecimal("price"));
//                product.setName("" + rs.getString("name"));
//                product.setDescription(rs.getString("description"));
//                product.setImagePath(rs.getString("imagepath");
//                all.add(product);                
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
//    // adds a product object to the db
//    public static int addProduct(Product prod) {
//        ConnectionPool pool = ConnectionPool.getInstance();
//        Connection connection = pool.getConnection();
//        PreparedStatement ps = null;
//
//        String query = "insert into products " +
//                       "(category, price, name, description, imagepath) " +
//                       "values (?, ?, ?, ?, ?)";
//        
//        try {
//            ps = connection.prepareStatement(query);
//            ps.setString(1, prod.getCategory());
//            ps.setDecimal(2, prod.getPrice());
//            ps.setString(3, prod.getName());
//            ps.setString(4, prod.getDescription());
//            ps.setString(5, prod.getImagePath());
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
//    // adds product objects from list to db
//    public static int addEmployees(ArrayList<Product> empList) {
//        int recordsAdded = 0;
//        for (Product emp : empList)
//        {
//            recordsAdded += addEmployee(emp);
//        }
//        return recordsAdded;
//    }
//    
//    // deletes product object from db
//    public static int deleteEmployee(Product emp) {   
//        ConnectionPool pool = ConnectionPool.getInstance();
//        Connection connection = pool.getConnection();
//        PreparedStatement ps = null;
//
//        String query = "DELETE FROM employees "
//                + "WHERE employeeid = ?";
//        try {
//            ps = connection.prepareStatement(query);
//            ps.setString(1, emp.getEmployeeID());
//
//            return ps.executeUpdate();
//        } catch (SQLException e) {
//            System.out.println(e);
//            return 0;
//        } finally {
//            DBUtil.closePreparedStatement(ps);
//            pool.freeConnection(connection);
//        }
//    }
//    
//    // returns product object from db with specified employeeID
//    public static Product getEmployee(int empID) {   
//        ConnectionPool pool = ConnectionPool.getInstance();
//        Connection connection = pool.getConnection();
//        PreparedStatement ps = null;
//        ResultSet rs = null;
//
//        String query = "SELECT * FROM employees "
//                + "WHERE employeeid = ?";
//        try {
//            ps = connection.prepareStatement(query);
//            ps.setInt(1, empID);
//            rs = ps.executeQuery();
//            Product p = null;
//            if (rs.next()) {
//                p = new Product();
//                p.setFirstName(rs.getString("firstname"));
//                p.setMiddleName(rs.getString("middlename"));
//                p.setLastName(rs.getString("lastname"));
//                p.setEmployeeID("" + rs.getInt("employeeid"));
//                p.setBirthDate(rs.getDate("birthdate").toLocalDate());
//                p.setHireDate(rs.getDate("hiredate").toLocalDate());
//            }
//            return p;
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
//    public static int updateEmployee(Product emp)
//    {
//        ConnectionPool pool = ConnectionPool.getInstance();
//        Connection connection = pool.getConnection();
//        PreparedStatement ps = null;
//        ResultSet rs = null;
//
//        String query = "UPDATE employees " +
//                "SET firstname = ?, " + 
//                "middlename = ?, " + 
//                "lastname = ?, " + 
//                "birthdate = ?, " +
//                "hiredate = ? " +              
//                "WHERE employeeid = ?";
//        try {
//            ps = connection.prepareStatement(query);
//            ps.setString(1, emp.getFirstName());
//            ps.setString(2, emp.getMiddleName());
//            ps.setString(3, emp.getLastName());
//            ps.setDate(4, Date.valueOf(emp.getBirthDate()));
//            ps.setDate(5, Date.valueOf(emp.getHireDate()));
//            ps.setString(6, emp.getEmployeeID());
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
//    // return list of product objects hired before or after the 'searchDate', as indicated by 'before'
//    public static ArrayList<Product> getEmployeesByDate(LocalDate searchDate, boolean before)
//    {
//        ArrayList<Product> employees = new ArrayList<Product>();
//        ConnectionPool pool = ConnectionPool.getInstance();
//        Connection connection = pool.getConnection();
//        PreparedStatement ps = null;
//        ResultSet rs = null;
//        String query = "";
//        if (before) {
//            query = "SELECT * FROM employees "
//                + "WHERE hiredate < ? ";
//        } else {
//            query = "SELECT * FROM employees "
//                + "WHERE hiredate >= ? ";
//        }
//        
//        try {
//            ps = connection.prepareStatement(query);
//            ps.setDate(1, Date.valueOf(searchDate));
//            rs = ps.executeQuery();
//            Product product = null;
//            while (rs.next()) {
//                product = new Product();
//                product.setFirstName(rs.getString("firstName"));
//                product.setMiddleName(rs.getString("middleName"));
//                product.setLastName(rs.getString("lastName"));
//                product.setEmployeeID("" + rs.getInt("employeeID"));
//                product.setBirthDate(rs.getDate("birthDate").toLocalDate());
//                product.setHireDate(rs.getDate("hireDate").toLocalDate());
//                employees.add(product);                
//            }
//            return employees;
//        } catch (SQLException e) {
//            System.out.println(e);
//            return null;
//        } finally {
//            DBUtil.closeResultSet(rs);
//            DBUtil.closePreparedStatement(ps);
//            pool.freeConnection(connection);
//        }
//    }
}
