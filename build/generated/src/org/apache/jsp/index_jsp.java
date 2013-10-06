package org.apache.jsp;

import javax.servlet.*;
import javax.servlet.http.*;
import javax.servlet.jsp.*;

public final class index_jsp extends org.apache.jasper.runtime.HttpJspBase
    implements org.apache.jasper.runtime.JspSourceDependent {

  private static final JspFactory _jspxFactory = JspFactory.getDefaultFactory();

  private static java.util.List<String> _jspx_dependants;

  static {
    _jspx_dependants = new java.util.ArrayList<String>(2);
    _jspx_dependants.add("/jspf/header.jspf");
    _jspx_dependants.add("/jspf/footer.jspf");
  }

  private org.glassfish.jsp.api.ResourceInjector _jspx_resourceInjector;

  public java.util.List<String> getDependants() {
    return _jspx_dependants;
  }

  public void _jspService(HttpServletRequest request, HttpServletResponse response)
        throws java.io.IOException, ServletException {

    PageContext pageContext = null;
    HttpSession session = null;
    ServletContext application = null;
    ServletConfig config = null;
    JspWriter out = null;
    Object page = this;
    JspWriter _jspx_out = null;
    PageContext _jspx_page_context = null;

    try {
      response.setContentType("text/html; charset=UTF-8");
      pageContext = _jspxFactory.getPageContext(this, request, response,
      			null, true, 8192, true);
      _jspx_page_context = pageContext;
      application = pageContext.getServletContext();
      config = pageContext.getServletConfig();
      session = pageContext.getSession();
      out = pageContext.getOut();
      _jspx_out = out;
      _jspx_resourceInjector = (org.glassfish.jsp.api.ResourceInjector) application.getAttribute("com.sun.appserv.jsp.resource.injector");

      out.write("\n");
      out.write("\n");
      out.write("\n");
      out.write("\n");
      out.write("\n");
      out.write("\n");
      out.write("\n");
      out.write("<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\" \"http://www.w3.org/TR/html4/loose.dtd\">\n");
      out.write("\n");
      out.write("<html>\n");
      out.write("    <head>\n");
      out.write("        <link rel=\"stylesheet\" type=\"text/css\" href=\"../css/turtleshell.css\" media=\"screen, projection\"> \n");
      out.write("        <script type=\"text/javascript\" src=\"js/jquery-1.10.2.js\"></script>\t\n");
      out.write("        <script type=\"text/javascript\" language=\"javascript\" src=\"js/hoverIntent.js\"></script>\n");
      out.write("        <script type=\"text/javascript\" language=\"javascript\" src=\"js/jquery.dropdown.js\"></script>\n");
      out.write("\n");
      out.write("        <title>Turtleshell.us</title>\n");
      out.write("    </head>\n");
      out.write("\n");
      out.write("    <body>\n");
      out.write("        <div id=\"main\">\n");
      out.write("            <div id=\"header\">\n");
      out.write("                <img src=\"images/turtleshell-header.jpg\" alt=\"Welcome to Turtleshell.us!\" />\n");
      out.write("                <div id=\"nav\">\n");
      out.write("                    <ul class = \"nav_bar\">\n");
      out.write("                        <li><a href=\"#\">Home</a></li>\n");
      out.write("                        <li><a href=\"#\">Shop</a>\n");
      out.write("                            <ul class = \"dropdown\">\n");
      out.write("                                <li><a href=\"#\">Girls</a></li>\n");
      out.write("                                <li><a href=\"#\">Guys</a></li>\n");
      out.write("                                <li><a href=\"#\">Accessories</a></li>\n");
      out.write("                                <ul class = \"dropdown\">\n");
      out.write("                                    <li><a href=\"#\">Hats and Hoods</a></li>\n");
      out.write("                                    <li><a href=\"#\">Shoes</a></li>\n");
      out.write("                                    <li><a href=\"#\">Bags</a></li>\n");
      out.write("                                    <li><a href=\"#\">Extras</a></li>\n");
      out.write("                                </ul>\n");
      out.write("                                <li><a href=\"#\">Sale</a></li>\n");
      out.write("                            </ul>\n");
      out.write("                        <li><a href=\"#\">Community</a></li>\n");
      out.write("                        <ul class =\"dropdown\">\n");
      out.write("                            <li><a href=\"#\">Find People</a></li>\n");
      out.write("                            <li><a href=\"#\">Boards</a></li>\n");
      out.write("                        </ul>\n");
      out.write("                        <li><a href=\"#\">Events</a></li>\n");
      out.write("                        <ul class=\"dropdown\">\n");
      out.write("                            <li><a href=\"#\">Tickets</a></li>\n");
      out.write("                            <li><a href=\"#\">Local</a></li>\n");
      out.write("                        </ul>\n");
      out.write("                        <li><a href=\"#\">Blog</a></li>\n");
      out.write("                        <li><a href=\"#\">About</a></li>\n");
      out.write("                    </ul>\n");
      out.write("                </div>\n");
      out.write("            </div>\n");
      out.write("\n");
      out.write("\n");
      out.write("<p>hello world</p>");
      out.write("   \n");
      out.write("        </div>\n");
      out.write("    </body>\n");
      out.write("</html>\n");
    } catch (Throwable t) {
      if (!(t instanceof SkipPageException)){
        out = _jspx_out;
        if (out != null && out.getBufferSize() != 0)
          out.clearBuffer();
        if (_jspx_page_context != null) _jspx_page_context.handlePageException(t);
        else throw new ServletException(t);
      }
    } finally {
      _jspxFactory.releasePageContext(_jspx_page_context);
    }
  }
}
