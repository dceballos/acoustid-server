// Acoustid -- Audio fingerprint lookup server
// Copyright (C) 2010  Lukas Lalinsky
//
// This program is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// This program is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with this program.  If not, see <http://www.gnu.org/licenses/>.

package org.acoustid.server.handler.admin;

import com.google.inject.Inject;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import java.io.PrintWriter;
import org.acoustid.server.ApplicationContext;
import org.acoustid.server.handler.RequestHandler;

public class StatusHandler implements RequestHandler {

    private ApplicationContext context;

    @Inject
    public StatusHandler(ApplicationContext context) {
        this.context = context;
    }

    @Override
    public void handle(HttpServletRequest request, HttpServletResponse response) throws Exception {
        PrintWriter writer = response.getWriter();
        writer.println("Acoustid Server Status");
        writer.println();
        writer.println("Lookups:\t" + context.getSuccessfulLookupCount() + " / " + context.getLookupCount());
        writer.println("Submissions:\t" + context.getSubmissionCount());

        response.setContentType("text/plain");
        response.setCharacterEncoding("UTF-8");
        response.setStatus(HttpServletResponse.SC_OK);
    }

}
