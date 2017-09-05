<!DOCTYPE html>


<html>
    <head>
        <meta charset="utf-8">
        <title>Murach's Java Servlets and JSP</title>
        <link rel="stylesheet" href="styles/main.css" type="text/css"/>

    </head>
    <body>

        <!--            <tr>
                          <th>Category</th>
                          <th class="right">ID</th>
                          <th>Price</th>
                          <th>Name</th>
                          <th>Description</th>
                          <th>Images</th>
                          <th>&nbsp;</th>
                      </tr>
                      <tr>
                          <td>Hp Laptop</td>
                          <td class="right">$300.95</td>
                          <td><form action="cart" method="post">
                                  <input type="hidden" name="productCode" value="8601">
                                  <input type="submit" value="Add To Cart">
                              </form></td>
                      </tr>
                      <tr>
                          <td>Iphone 7</td>
                          <td class="right">$600.95</td>
                          <td><form action="cart" method="post">
                                  <input type="hidden" name="productCode" value="pf01">
                                  <input type="submit" value="Add To Cart">
                              </form></td>
                      </tr>
                      <tr>
                          <td>Apple Tablet</td>
                          <td class="right">$105.95</td>
                          <td><form action="cart" method="post">
                                  <input type="hidden" name="productCode" value="pf02">
                                  <input type="submit" value="Add To Cart">
                              </form></td>
                      </tr>
                      <tr>
                          <td>Bagpack</td>
                          <td class="right">$35.95</td>
                          <td><form action="cart" method="post">
                                  <input type="hidden" name="productCode" value="jr01">
                                  <input type="submit" value="Add To Cart">
                              </form></td>
                      </tr>
                      <tr>
                          <td>Golden Watch</td>
                          <td class="right">$95.95</td>
                          <td><form action="cart" method="post">
                                  <input type="hidden" name="productCode" value="jr01">
                                  <input type="submit" value="Add To Cart">
                              </form></td>
                      </tr>
                      <tr>
                          <td>Hp Gps</td>
                          <td class="right">$55.95</td>
                          <td><form action="cart" method="post">
                                  <input type="hidden" name="productCode" value="jr01">
                                  <input type="submit" value="Add To Cart">
                              </form></td>
                      </tr>
                      <tr>
                          <td>Hp Hard Drive</td>
                          <td class="right">$85.95</td>
                          <td><form action="cart" method="post">
                                  <input type="hidden" name="productCode" value="jr01">
                                  <input type="submit" value="Add To Cart">
                              </form></td>
                      </tr>
                      <tr>
                          <td>Iphone 7 Logic board</td>
                          <td class="right">$71.95</td>
                          <td><form action="cart" method="post">
                                  <input type="hidden" name="productCode" value="jr01">
                                  <input type="submit" value="Add To Cart">
                              </form></td>
                      </tr>
                      <tr>
                          <td>Iphone 7 Case</td>
                          <td class="right">$35.95</td>
                          <td><form action="cart" method="post">
                                  <input type="hidden" name="productCode" value="jr01">
                                  <input type="submit" value="Add To Cart">
                              </form></td>
                      </tr>
                      <tr>
                          <td>Iphone Charger</td>
                          <td class="right">$35.95</td>
                          <td><form action="cart" method="post">
                                  <input type="hidden" name="productCode" value="jr01">
                                  <input type="submit" value="Add To Cart">
                              </form></td>
                      </tr>
                      <tr>
                          <td>Iphone 7 plus Car charger</td>
                          <td class="right">$35.95</td>
                          <td><form action="cart" method="post">
                                  <input type="hidden" name="productCode" value="jr01">
                                  <input type="submit" value="Add To Cart">
                              </form></td>
                      </tr>
                      <tr>
                          <td>Samsun Galaxy Phone</td>
                          <td class="right">$250.95</td>
                          <td><form action="cart" method="post">
                                  <input type="hidden" name="productCode" value="jr01">
                                  <input type="submit" value="Add To Cart">
                              </form></td>
                      </tr>-->
        <main>
            <div class="prod">     
                <h1>Products List</h1>
                <%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core" %>
                <table>

                    <c:forEach var="item" items="${product}">
                        <tr>
                            <td>${item.category}</td>
                            <td>${item.productID}</td>
                            <td>${item.price}</td>
                            <td>${item.name}</td>
                            <td>${item.description}</td>
                            <td><img src="${item.imagePath}" alt="" ></td>

                            <td> <form action="cart" method="post">

                                    <input type="hidden" name="productID" value="${item.productID}"/>
                                    <input type="submit" value="Update">

                                </form>
                            </td>
                        </tr>
                    </c:forEach >
                </table>

            </div>
        </main>
    </body>
</html>